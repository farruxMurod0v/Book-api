<?php

declare(strict_types=1);

namespace App\Components\User;

use Symfony\Component\Serializer\Annotation\Groups;

class UserMaxAgeDto
{
    public function __construct(
        #[Groups(['user:read'])]
        private int $maxAge,
    )
    {
    }

    public function getMaxAge(): int
    {
        return $this->maxAge;
    }
}
