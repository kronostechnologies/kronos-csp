<?php

namespace Kronos\ContentSecurityPolicy;

interface PolicyDirectorInterface
{
    public function buildContentSecurityPolicy(): Policy;
}
