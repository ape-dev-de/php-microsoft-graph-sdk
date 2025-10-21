<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LandingPageDetail
 */
class LandingPageDetail
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Landing page detail content. */
        public ?string $content = null,
        /** Indicates whether this language detail is default for the landing page. */
        public ?bool $isDefaultLangauge = null,
        /** The content language for the landing page. */
        public ?string $language = null
    ) {}
}
