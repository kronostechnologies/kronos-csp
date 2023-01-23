<?php

namespace Kronos\ContentSecurityPolicy;

class Factory
{
    public function createContentSecurityPolicyBuilder(): Builder
    {
        $policy = $this->createContentSecurityPolicyDTO();
        return new Builder($policy);
    }

    protected function createContentSecurityPolicyDTO(): Policy
    {
        return new Policy();
    }
}
