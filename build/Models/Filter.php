<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Filter
 */
class Filter
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * *Experimental* Filter group set used to decide whether given object belongs and should be processed as part of this object mapping. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     * @var FilterGroup[]
     */
    public array $categoryFilterGroups = [];

    /** 
     * Filter group set used to decide whether given object is in scope for provisioning. This is the filter which should be used in most cases. If an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter isn't satisfied any longer, such object will get deprovisioned'. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     * @var FilterGroup[]
     */
    public array $groups = [];

    /** 
     * *Experimental* Filter group set used to filter out objects at the early stage of reading them from the directory. If an object doesn't satisfy this filter, then it will not be processed further. Important to understand is that if an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter is no longer satisfied, such object will NOT get deprovisioned. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
     * @var FilterGroup[]
     */
    public array $inputFilterGroups = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['categoryFilterGroups'])) {
            $this->categoryFilterGroups = $data['categoryFilterGroups'];
        }
        if (isset($data['groups'])) {
            $this->groups = $data['groups'];
        }
        if (isset($data['inputFilterGroups'])) {
            $this->inputFilterGroups = $data['inputFilterGroups'];
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
