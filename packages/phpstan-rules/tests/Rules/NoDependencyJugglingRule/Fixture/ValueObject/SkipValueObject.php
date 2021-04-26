<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\NoDependencyJugglingRule\Fixture\ValueObject;

use Symplify\PHPStanRules\Tests\Rules\NoDependencyJugglingRule\Source\JuggleBall;

final class SkipValueObject
{
    /**
     * @var JuggleBall
     */
    private $juggleBall;

    public function __construct(JuggleBall $juggleBall)
    {
        $this->juggleBall = $juggleBall;
    }

    public function another($another)
    {
        $another->run($this->juggleBall);
    }
}
