<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserFlowLanguageConfiguration
 */
class UserFlowLanguageConfiguration
{
    public function __construct(
        /** The language name to display. This property is read-only. */
        public ?string $displayName = null,
        /** Indicates whether the language is enabled within the user flow. */
        public ?bool $isEnabled = null,
        /** Collection of pages with the default content to display in a user flow for a specified language. This collection doesn't allow any kind of modification. */
        public array $defaultPages = [],
        /** @var string[] Collection of pages with the overrides messages to display in a user flow for a specified language. This collection only allows you to modify the content of the page, any other modification isn''t allowed (creation or deletion of pages). */
        public array $overridesPages = []
    ) {}
}
