<?php

declare(strict_types=1);

namespace Migration;

use Cycle\Migrations\Migration;

class OrmDefault9f357863cbed31c30951994a1f51673f extends Migration
{
    protected const DATABASE = 'default';

    public function up(): void
    {
        $this->table('users')
        ->addColumn('coins', 'integer', ['nullable' => false, 'defaultValue' => 0])
        ->addColumn('cash', 'integer', ['nullable' => false, 'defaultValue' => 0])
        ->dropColumn('email')
        ->update();
    }

    public function down(): void
    {
        $this->table('users')
        ->addColumn('email', 'text', ['nullable' => false, 'defaultValue' => null, 'size' => 255])
        ->dropColumn('coins')
        ->dropColumn('cash')
        ->update();
    }
}
