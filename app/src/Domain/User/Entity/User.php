<?php

declare(strict_types=1);

namespace App\Domain\User\Entity;

use App\Infrastructure\Persistence\CycleORMUserRepository;
use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;

#[Entity(
    repository: CycleORMUserRepository::class,
)]
class User
{
    public function __construct(
        #[Column(type: 'primary')]
        private int $id,
        #[Column(type: 'string')]
        private string $username,
        #[Column(type: 'integer', default: 0)]
        private int $coins = 0,
        #[Column(type: 'integer', default: 0)]
        private int $cash = 0
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getCoins(): int
    {
        return $this->coins;
    }

    public function getCash(): int
    {
        return $this->cash;
    }
}
