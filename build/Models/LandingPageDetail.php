<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LandingPageDetail
 */
class LandingPageDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Landing page detail content. */
    public ?string $content = null;

    /** Indicates whether this language detail is default for the landing page. */
    public ?bool $isDefaultLangauge = null;

    /** The content language for the landing page. */
    public ?string $language = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['isDefaultLangauge'])) {
            $this->isDefaultLangauge = is_bool($data['isDefaultLangauge']) ? $data['isDefaultLangauge'] : (bool)$data['isDefaultLangauge'];
        }
        if (isset($data['language'])) {
            $this->language = $data['language'];
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
