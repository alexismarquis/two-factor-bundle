<?php

namespace Scheb\TwoFactorBundle\Model;

use AppBundle\Entity\User\TrustedComputer;

/**
 * Interface TrustedComputerInterface
 */
interface TrustedComputerInterface
{
    /**
     * Add a trusted computer token.
     *
     * @param $trustedComputer TrustedComputer
     */
    public function addTrustedComputer(TrustedComputer $trustedComputer);

    /**
     * Validate a trusted computer token.
     *
     * @param string $token
     *
     * @return bool
     */
    public function isTrustedComputer($token);
}
