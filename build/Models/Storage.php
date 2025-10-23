<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Storage
 */
class Storage
{
    /** 
     * 
     * @var FileStorage|\stdClass|null
     */
    public mixed $fileStorage = null;

    /** 
     * 
     * @var StorageSettings|\stdClass|null
     */
    public mixed $settings = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['fileStorage'])) {
            $this->fileStorage = $data['fileStorage'];
        }
        if (isset($data['settings'])) {
            $this->settings = $data['settings'];
        }
    }
}
