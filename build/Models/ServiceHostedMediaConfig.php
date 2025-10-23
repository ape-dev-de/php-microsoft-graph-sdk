<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHostedMediaConfig
 */
class ServiceHostedMediaConfig
{
    /** 
     * The list of media to pre-fetch.
     * @var MediaInfo[]
     */
    public array $preFetchMedia = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['preFetchMedia'])) {
            $this->preFetchMedia = $data['preFetchMedia'];
        }
    }
}
