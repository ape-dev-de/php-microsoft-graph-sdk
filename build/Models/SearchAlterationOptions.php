<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAlterationOptions
 */
class SearchAlterationOptions
{
    /**
     * Indicates whether spelling modifications are enabled. If enabled, the user gets the search results for the corrected query if there were no results for the original query with typos. The response will also include the spelling modification information in the queryAlterationResponse property. Optional.
     */
    private ?bool $enableModification;

    /**
     * Indicates whether spelling suggestions are enabled. If enabled, the user gets the search results for the original search query and suggestions for spelling correction in the queryAlterationResponse property of the response for the typos in the query. Optional.
     */
    private ?string $enableSuggestion;


    public function getEnableModification(): ?bool
    {
        return $this->enableModification;
    }

    public function setEnableModification(?bool $enableModification): self
    {
        $this->enableModification = $enableModification;
        return $this;
    }

    public function getEnableSuggestion(): ?string
    {
        return $this->enableSuggestion;
    }

    public function setEnableSuggestion(?string $enableSuggestion): self
    {
        $this->enableSuggestion = $enableSuggestion;
        return $this;
    }

}
