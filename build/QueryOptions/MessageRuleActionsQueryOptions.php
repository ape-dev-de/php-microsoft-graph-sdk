<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MessageRuleActions resources
 *
 * Available select fields:
 * - assignCategories
 * - copyToFolder
 * - delete
 * - forwardAsAttachmentTo
 * - forwardTo
 * - markAsRead
 * - markImportance
 * - moveToFolder
 * - permanentDelete
 * - redirectTo
 * - stopProcessingRules
 */
class MessageRuleActionsQueryOptions extends QueryOptions
{
    public const FIELD_ASSIGN_CATEGORIES = 'assignCategories';
    public const FIELD_COPY_TO_FOLDER = 'copyToFolder';
    public const FIELD_DELETE = 'delete';
    public const FIELD_FORWARD_AS_ATTACHMENT_TO = 'forwardAsAttachmentTo';
    public const FIELD_FORWARD_TO = 'forwardTo';
    public const FIELD_MARK_AS_READ = 'markAsRead';
    public const FIELD_MARK_IMPORTANCE = 'markImportance';
    public const FIELD_MOVE_TO_FOLDER = 'moveToFolder';
    public const FIELD_PERMANENT_DELETE = 'permanentDelete';
    public const FIELD_REDIRECT_TO = 'redirectTo';
    public const FIELD_STOP_PROCESSING_RULES = 'stopProcessingRules';

    /**
     * Select specific MessageRuleActions properties
     * 
     * @param array<string> $select Use MessageRuleActionsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
