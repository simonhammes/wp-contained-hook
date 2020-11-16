<?php declare(strict_types=1);

namespace TypistTech\WPContainedHook\Test\Hooks\TestClasses;

class Shortcode 
{
    public function __construct(Dependency $dependency)
    {
        $this->dependency = $dependency;
    }

    public function render(): string
    {
        return $this->dependency->doSomething();
    }
}

?>
