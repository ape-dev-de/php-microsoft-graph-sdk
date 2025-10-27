<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * HorizontalSection
 */
class HorizontalSection
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Enumeration value that indicates the emphasis of the section background. The possible values are: none, netural, soft, strong, unknownFutureValue.
     * @var SectionEmphasisType|\stdClass|null
     */
    public mixed $emphasis = null;

    /** 
     * Layout type of the section. The possible values are: none, oneColumn, twoColumns, threeColumns, oneThirdLeftColumn, oneThirdRightColumn, fullWidth, unknownFutureValue.
     * @var HorizontalSectionLayoutType|\stdClass|null
     */
    public mixed $layout = null;

    /** 
     * The set of vertical columns in this section.
     * @var HorizontalSectionColumn[]
     */
    public array $columns = [];


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
        if (isset($data['emphasis'])) {
            $this->emphasis = is_array($data['emphasis']) ? new SectionEmphasisType($data['emphasis']) : $data['emphasis'];
        }
        if (isset($data['layout'])) {
            $this->layout = is_array($data['layout']) ? new HorizontalSectionLayoutType($data['layout']) : $data['layout'];
        }
        if (isset($data['columns'])) {
            $this->columns = $data['columns'];
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
