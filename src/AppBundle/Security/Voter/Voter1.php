<?php

namespace AppBundle\Security\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class Voter1 extends Voter
{
    public function supports( $attribute, $subject )
    {
        return "foo" == $attribute;
    }

    protected function voteOnAttribute( $attribute, $subject, TokenInterface $token )
    {
        ladybug_dump( "I'm Voter 1. I'm granting access." );
        return static::ACCESS_GRANTED;
    }
}
