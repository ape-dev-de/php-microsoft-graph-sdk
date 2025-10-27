<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessagePolicyViolation
 */
class ChatMessagePolicyViolation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The action taken by the DLP provider on the message with sensitive content. Supported values are: NoneNotifySender -- Inform the sender of the violation but allow readers to read the message.BlockAccess -- Block readers from reading the message.BlockAccessExternal -- Block users outside the organization from reading the message, while allowing users within the organization to read the message.
     * @var ChatMessagePolicyViolationDlpActionTypes|\stdClass|null
     */
    public ChatMessagePolicyViolationDlpActionTypes|\stdClass|null $dlpAction = null;

    /** Justification text provided by the sender of the message when overriding a policy violation. */
    public ?string $justificationText = null;

    /** 
     * Information to display to the message sender about why the message was flagged as a violation.
     * @var ChatMessagePolicyViolationPolicyTip|\stdClass|null
     */
    public ChatMessagePolicyViolationPolicyTip|\stdClass|null $policyTip = null;

    /** 
     * Indicates the action taken by the user on a message blocked by the DLP provider. Supported values are: NoneOverrideReportFalsePositiveWhen the DLP provider is updating the message for blocking sensitive content, userAction isn't required.
     * @var ChatMessagePolicyViolationUserActionTypes|\stdClass|null
     */
    public ChatMessagePolicyViolationUserActionTypes|\stdClass|null $userAction = null;

    /** 
     * Indicates what actions the sender may take in response to the policy violation. Supported values are: NoneAllowFalsePositiveOverride -- Allows the sender to declare the policyViolation to be an error in the DLP app and its rules, and allow readers to see the message again if the dlpAction hides it.AllowOverrideWithoutJustification -- Allows the sender to override the DLP violation and allow readers to see the message again if the dlpAction hides it, without needing to provide an explanation for doing so. AllowOverrideWithJustification -- Allows the sender to override the DLP violation and allow readers to see the message again if the dlpAction hides it, after providing an explanation for doing so.AllowOverrideWithoutJustification and AllowOverrideWithJustification are mutually exclusive.
     * @var ChatMessagePolicyViolationVerdictDetailsTypes|\stdClass|null
     */
    public ChatMessagePolicyViolationVerdictDetailsTypes|\stdClass|null $verdictDetails = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['dlpAction'])) {
            $this->dlpAction = is_array($data['dlpAction']) ? new ChatMessagePolicyViolationDlpActionTypes($data['dlpAction']) : $data['dlpAction'];
        }
        if (isset($data['justificationText'])) {
            $this->justificationText = $data['justificationText'];
        }
        if (isset($data['policyTip'])) {
            $this->policyTip = is_array($data['policyTip']) ? new ChatMessagePolicyViolationPolicyTip($data['policyTip']) : $data['policyTip'];
        }
        if (isset($data['userAction'])) {
            $this->userAction = is_array($data['userAction']) ? new ChatMessagePolicyViolationUserActionTypes($data['userAction']) : $data['userAction'];
        }
        if (isset($data['verdictDetails'])) {
            $this->verdictDetails = is_array($data['verdictDetails']) ? new ChatMessagePolicyViolationVerdictDetailsTypes($data['verdictDetails']) : $data['verdictDetails'];
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
