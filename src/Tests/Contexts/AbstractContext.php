<?php

namespace Tests\Contexts;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Symfony2Extension\Context\KernelAwareContext;
use Symfony\Component\HttpKernel\KernelInterface;

abstract class AbstractContext extends MinkContext implements Context, SnippetAcceptingContext, KernelAwareContext
{
    /**
     * @var Translator
     */
    protected $translator;

    /**
     * @var Router
     */
    protected $router;

    /**
     * @var Kernel
     */
    protected $kernel;

    protected $locale;

    public function __construct($locale)
    {
        $this->locale = $locale;
    }

    /**
     * Sets HttpKernel instance.
     * This method will be automatically called by Symfony2Extension ContextInitializer.
     *
     * @param KernelInterface $kernel
     */
    public function setKernel(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    /** @BeforeScenario */
    public function beforeScenario()
    {
        $this->translator  = $this->kernel->getContainer()->get('translator');
        $this->router      = $this->kernel->getContainer()->get('router');
    }

    /**
     * @Then I should see :transKey trans
     */
    public function iShouldSeeTrans($transKey)
    {
        $text = $this->translator->trans($transKey);

        $this->assertPageContainsText($text);
    }

    /**
     * @Given I am on :route route
     */
    public function iAmOnRoute($route)
    {
        $url = $this->router->generate($route, ['_locale' => $this->locale]);

        $this->visit($url);
    }
}
