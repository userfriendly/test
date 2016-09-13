<?php

namespace AppBundle\Security\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class Voter2 extends Voter
{
    public function supports( $attribute, $subject )
    {
        return "foo" == $attribute;
    }

    protected function voteOnAttribute( $attribute, $subject, TokenInterface $token )
    {
        if ( "foo" == $attribute && "baa" == $subject )
        {
            ladybug_dump( "I'm Voter 2. I'm granting access." );
            return true;
        }
        ladybug_dump( "I'm Voter 2. I'm totally denying access." );
        return false;
    }
}
