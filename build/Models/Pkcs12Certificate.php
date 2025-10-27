<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Pkcs12Certificate
 */
class Pkcs12Certificate
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The password for the pfx file. Required. If no password is used, you must still provide a value of ''. */
    public ?string $password = null;

    /** Represents the pfx content that is sent. The value should be a base-64 encoded version of the actual certificate content. Required. */
    public ?string $pkcs12Value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['password'])) {
            $this->password = $data['password'];
        }
        if (isset($data['pkcs12Value'])) {
            $this->pkcs12Value = $data['pkcs12Value'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
