<?php

namespace App\Http\Controllers;

use Anhqv\Character\CharacterRepoInterface;
use Illuminate\Http\Request;
use Utils;

class CharacterController extends Controller
{
    // Log levels
    const LOG_LEVEL_INFO = LOG_LEVEL_INFO;
    const LOG_LEVEL_DEBUG = LOG_LEVEL_DEBUG;

    // HTTP status codes
    const HTTP_OK = HTTP_OK;

    // Fields
    const ID = 'id';
    const NAME = 'name';
    const SURNAME = 'surname';
    const NICKNAME = 'nickname';
    const PAGE = 'page';
    const PER_PAGE = 'per_page';

    protected $rules_index = [
        self::NAME => 'sometimes|required',
        self::PAGE => 'required_with:per_page|integer|min:1',
        self::PER_PAGE => 'required_with:page|integer|min:1',
    ];

    public function __construct(CharacterRepoInterface $characterRepo)
    {
        $this->className = class_basename($this);

        $this->characterRepo = $characterRepo;
    }

    /**
     * @OA\Get(
     *  path="/characters",
     *  summary="Mostrar personajes",
     *  tags={"characters"},
     *  @OA\Response(
     *      response=200,
     *      description="Listado con los personajes consultados."
     *  ),
     *  @OA\Response(
     *      response="default",
     *      description="Ha ocurrido un error."
     *  )
     * )
     */
    public function index(Request $request)
    {
        $methodName = __FUNCTION__;
        Utils::log(static::LOG_LEVEL_DEBUG, $this->className, $methodName, 'Access');

        $data = $request->validate($this->rules_index);

        $name = isset($data[static::NAME]) ? $data[static::NAME] : null;
        $page = isset($data[static::PAGE]) ? $data[static::PAGE] : null;
        $perPage = isset($data[static::PER_PAGE]) ? $data[static::PER_PAGE] : null;

        $filters = [
            static::NAME => $name,
        ];

        $visibleFields = [
            static::ID, static::NAME, static::SURNAME, static::NICKNAME,
        ];

        $res = $this->characterRepo->getPaginated($request, $filters, $page, $perPage, $visibleFields);

        Utils::log(static::LOG_LEVEL_DEBUG, $this->className, $methodName, 'Exit');
        return response()->json($res, static::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show(Request $request, $slug)
    {
        $methodName = __FUNCTION__;
        Utils::log(static::LOG_LEVEL_DEBUG, $this->className, $methodName, 'Access');

        $res = $this->characterRepo->findBySlug($slug);

        Utils::log(static::LOG_LEVEL_DEBUG, $this->className, $methodName, 'Exit');
        return response()->json($res, static::HTTP_OK, [], JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        //
    }
}
