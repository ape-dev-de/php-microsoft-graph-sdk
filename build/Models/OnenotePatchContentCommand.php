<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePatchContentCommand
 */
class OnenotePatchContentCommand
{
    public function __construct(
        /**  */
        public ?OnenotePatchActionType $action = null,
        /** A string of well-formed HTML to add to the page, and any image or file binary data. If the content contains binary data, the request must be sent using the multipart/form-data content type with a 'Commands' part. */
        public ?string $content = null,
        /** The location to add the supplied content, relative to the target element. The possible values are: after (default) or before. */
        public ?OnenotePatchInsertPosition $position = null,
        /** The element to update. Must be the #<data-id> or the generated <id> of the element, or the body or title keyword. */
        public ?string $target = null
    ) {}
}
