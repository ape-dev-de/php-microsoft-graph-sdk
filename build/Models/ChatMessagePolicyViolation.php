<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessagePolicyViolation
 */
class ChatMessagePolicyViolation
{
    /**
     * The action taken by the DLP provider on the message with sensitive content. Supported values are: NoneNotifySender -- Inform the sender of the violation but allow readers to read the message.BlockAccess -- Block readers from reading the message.BlockAccessExternal -- Block users outside the organization from reading the message, while allowing users within the organization to read the message.
     */
    private ?string $dlpAction;

    /**
     * Justification text provided by the sender of the message when overriding a policy violation.
     */
    private ?string $justificationText;

    /**
     * Information to display to the message sender about why the message was flagged as a violation.
     */
    private ?string $policyTip;

    /**
     * Indicates the action taken by the user on a message blocked by the DLP provider. Supported values are: NoneOverrideReportFalsePositiveWhen the DLP provider is updating the message for blocking sensitive content, userAction isn''t required.
     */
    private ?string $userAction;

    /**
     * Indicates what actions the sender may take in response to the policy violation. Supported values are: NoneAllowFalsePositiveOverride -- Allows the sender to declare the policyViolation to be an error in the DLP app and its rules, and allow readers to see the message again if the dlpAction hides it.AllowOverrideWithoutJustification -- Allows the sender to override the DLP violation and allow readers to see the message again if the dlpAction hides it, without needing to provide an explanation for doing so. AllowOverrideWithJustification -- Allows the sender to override the DLP violation and allow readers to see the message again if the dlpAction hides it, after providing an explanation for doing so.AllowOverrideWithoutJustification and AllowOverrideWithJustification are mutually exclusive.
     */
    private ?string $verdictDetails;


    public function getDlpAction(): ?string
    {
        return $this->dlpAction;
    }

    public function setDlpAction(?string $dlpAction): self
    {
        $this->dlpAction = $dlpAction;
        return $this;
    }

    public function getJustificationText(): ?string
    {
        return $this->justificationText;
    }

    public function setJustificationText(?string $justificationText): self
    {
        $this->justificationText = $justificationText;
        return $this;
    }

    public function getPolicyTip(): ?string
    {
        return $this->policyTip;
    }

    public function setPolicyTip(?string $policyTip): self
    {
        $this->policyTip = $policyTip;
        return $this;
    }

    public function getUserAction(): ?string
    {
        return $this->userAction;
    }

    public function setUserAction(?string $userAction): self
    {
        $this->userAction = $userAction;
        return $this;
    }

    public function getVerdictDetails(): ?string
    {
        return $this->verdictDetails;
    }

    public function setVerdictDetails(?string $verdictDetails): self
    {
        $this->verdictDetails = $verdictDetails;
        return $this;
    }

}
