<?php

namespace App\Security;

use App\Entity\Clients;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class UserProvider implements UserProviderInterface{

    public function loadUserByUsername(string $username)
    {
        throw new \Exception('TODO: fill in loadUserByUsername() inside'.__FILE__);
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof Clients) {
            throw new UnsupportedUserException(sprintf('Invalid user class "%s".', get_class($user)));
        }

        // Return a User object after making sure its data is "fresh".
        // Or throw a UsernameNotFoundException if the user no longer exists.
        throw new \Exception('TODO: fill in refreshUser() inside '.__FILE__);
    }
 
    public function supportsClass($class)
    {
        return Clients::class === $class;
    }
}