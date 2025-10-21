<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Pkcs12Certificate
 */
class Pkcs12Certificate
{
    public function __construct(
        /** The password for the pfx file. Required. If no password is used, you must still provide a value of ''''. */
        public ?string $password = null,
        /** Represents the pfx content that is sent. The value should be a base-64 encoded version of the actual certificate content. Required. */
        public ?string $pkcs12Value = null
    ) {}
}
