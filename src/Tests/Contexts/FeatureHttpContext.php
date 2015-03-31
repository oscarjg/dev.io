<?php

namespace Tests\Contexts;

/**
 * Class FeatureHttpContext
 * @package AppBundle\Features\Context
 */
class FeatureHttpContext extends AbstractContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }
}
