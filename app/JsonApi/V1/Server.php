<?php

namespace App\JsonApi\V1;

use LaravelJsonApi\Core\Server\Server as BaseServer;
use App\JsonApi\V1\Vises; //Visi
use App\JsonApi\V1\Mises; //Misi
use App\JsonApi\V1\Tentangs; //Tentangs
use App\JsonApi\V1\Tugasfungses; //Tugas dan Fungsi
use App\JsonApi\V1\Strukturppids; //Struktur PPID
use App\JsonApi\V1\Informasipubliks; //Informasi Publik
use App\JsonApi\V1\Faqs; //FAQ
use App\JsonApi\V1\Regulases; //Regulasi
use App\Models\Informasipublik;

// use App\JsonApi\V1\Kontaks; //Kontak


class Server extends BaseServer
{

    /**
     * The base URI namespace for this server.
     *
     * @var string
     */
    protected string $baseUri = '/api/v1';

    /**
     * Bootstrap the server when it is handling an HTTP request.
     *
     * @return void
     */
    public function serving(): void
    {
        // no-op
    }

    /**
     * Get the server's list of schemas.
     *
     * @return array
     */
    protected function allSchemas(): array
    {
        return [
            // @TODO
            Vises\VisiSchema::class,
            Mises\MisiSchema::class,
            Tentangs\TentangSchema::class,
            Tugasfungses\TugasfungsiSchema::class,
            Strukturppids\StrukturppidSchema::class,
            Kontaks\KontakSchema::class,
            Informasipubliks\InformasipublikSchema::class,
            Faqs\FaqSchema::class,
            Regulases\RegulasiSchema::class

        ];
    }
}
