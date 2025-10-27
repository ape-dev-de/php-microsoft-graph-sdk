<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CalendarSharingMessageAction
 */
class CalendarSharingMessageAction
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var CalendarSharingAction|\stdClass|null
     */
    public CalendarSharingAction|\stdClass|null $action = null;

    /** 
     * 
     * @var CalendarSharingActionType|\stdClass|null
     */
    public CalendarSharingActionType|\stdClass|null $actionType = null;

    /** 
     * 
     * @var CalendarSharingActionImportance|\stdClass|null
     */
    public CalendarSharingActionImportance|\stdClass|null $importance = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['action'])) {
            $this->action = is_string($data['action']) ? CalendarSharingAction::tryFrom($data['action']) : $data['action'];
        }
        if (isset($data['actionType'])) {
            $this->actionType = is_string($data['actionType']) ? CalendarSharingActionType::tryFrom($data['actionType']) : $data['actionType'];
        }
        if (isset($data['importance'])) {
            $this->importance = is_string($data['importance']) ? CalendarSharingActionImportance::tryFrom($data['importance']) : $data['importance'];
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
