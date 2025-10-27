<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsUrlMatchInfo
 */
class ExternalConnectorsUrlMatchInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * A list of the URL prefixes that must match URLs to be processed by this URL-to-item-resolver.
     * @var string[]
     */
    public array $baseUrls = [];

    /** A regular expression that will be matched towards the URL that is processed by this URL-to-item-resolver. The ECMAScript specification for regular expressions (ECMA-262) is used for the evaluation. The named groups defined by the regular expression will be used later to extract values from the URL. */
    public ?string $urlPattern = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['baseUrls'])) {
            $this->baseUrls = $data['baseUrls'];
        }
        if (isset($data['urlPattern'])) {
            $this->urlPattern = $data['urlPattern'];
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
