<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExcludeTarget
 */
class ExcludeTarget
{
    /** The object identifier of a Microsoft Entra user or group. */
    public ?string $id = null;

    /**  */
    public ?AuthenticationMethodTargetType $targetType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['targetType'])) {
            $this->targetType = $data['targetType'];
        }
    }
}
