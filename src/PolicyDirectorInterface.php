<?php

namespace Kronos\ContentSecurityPolicy;

interface PolicyDirectorInterface
{

    /**
     * @return Policy
     */
    public function buildContentSecurityPolicy();

}