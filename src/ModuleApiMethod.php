<?php

namespace schoetex\toolboxApi;

/**
 * Class ModuleApiMethod
 * @package schoetex\toolboxApi
 */
abstract class ModuleApiMethod implements ModuleApiInterface
{
    /**
     * Request - Objekt
     *
     * @var ModuleApiRequest
     */
    public ModuleApiRequest $objRequest;

    /**
     * Response Objekt
     *
     * @var ModuleApiResponse
     */
    public ModuleApiResponse $objResponse;
}