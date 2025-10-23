<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermStoreStore
 */
class TermStoreStore
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Default language of the term store. */
    public ?string $defaultLanguageTag = null;

    /** 
     * List of languages for the term store.
     * @var string[]
     */
    public array $languageTags = [];

    /** 
     * Collection of all groups available in the term store.
     * @var TermStoreGroup[]
     */
    public array $groups = [];

    /** 
     * Collection of all sets available in the term store. This relationship can only be used to load a specific term set.
     * @var TermStoreSet[]
     */
    public array $sets = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['defaultLanguageTag'])) {
            $this->defaultLanguageTag = $data['defaultLanguageTag'];
        }
        if (isset($data['languageTags'])) {
            $this->languageTags = $data['languageTags'];
        }
        if (isset($data['groups'])) {
            $this->groups = $data['groups'];
        }
        if (isset($data['sets'])) {
            $this->sets = $data['sets'];
        }
    }
}
