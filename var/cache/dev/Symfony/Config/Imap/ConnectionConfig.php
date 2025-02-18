<?php

namespace Symfony\Config\Imap;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ConnectionConfig 
{
    private $imapPath;
    private $username;
    private $password;
    private $attachmentsDir;
    private $createAttachmentsDirIfNotExists;
    private $createdAttachmentsDirPermissions;
    private $serverEncoding;
    private $enabled;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function imapPath($value): static
    {
        $this->_usedProperties['imapPath'] = true;
        $this->imapPath = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function username($value): static
    {
        $this->_usedProperties['username'] = true;
        $this->username = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function password($value): static
    {
        $this->_usedProperties['password'] = true;
        $this->password = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function attachmentsDir($value): static
    {
        $this->_usedProperties['attachmentsDir'] = true;
        $this->attachmentsDir = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function createAttachmentsDirIfNotExists($value): static
    {
        $this->_usedProperties['createAttachmentsDirIfNotExists'] = true;
        $this->createAttachmentsDirIfNotExists = $value;

        return $this;
    }

    /**
     * @default 770
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function createdAttachmentsDirPermissions($value): static
    {
        $this->_usedProperties['createdAttachmentsDirPermissions'] = true;
        $this->createdAttachmentsDirPermissions = $value;

        return $this;
    }

    /**
     * @default 'UTF-8'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serverEncoding($value): static
    {
        $this->_usedProperties['serverEncoding'] = true;
        $this->serverEncoding = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('imap_path', $value)) {
            $this->_usedProperties['imapPath'] = true;
            $this->imapPath = $value['imap_path'];
            unset($value['imap_path']);
        }

        if (array_key_exists('username', $value)) {
            $this->_usedProperties['username'] = true;
            $this->username = $value['username'];
            unset($value['username']);
        }

        if (array_key_exists('password', $value)) {
            $this->_usedProperties['password'] = true;
            $this->password = $value['password'];
            unset($value['password']);
        }

        if (array_key_exists('attachments_dir', $value)) {
            $this->_usedProperties['attachmentsDir'] = true;
            $this->attachmentsDir = $value['attachments_dir'];
            unset($value['attachments_dir']);
        }

        if (array_key_exists('create_attachments_dir_if_not_exists', $value)) {
            $this->_usedProperties['createAttachmentsDirIfNotExists'] = true;
            $this->createAttachmentsDirIfNotExists = $value['create_attachments_dir_if_not_exists'];
            unset($value['create_attachments_dir_if_not_exists']);
        }

        if (array_key_exists('created_attachments_dir_permissions', $value)) {
            $this->_usedProperties['createdAttachmentsDirPermissions'] = true;
            $this->createdAttachmentsDirPermissions = $value['created_attachments_dir_permissions'];
            unset($value['created_attachments_dir_permissions']);
        }

        if (array_key_exists('server_encoding', $value)) {
            $this->_usedProperties['serverEncoding'] = true;
            $this->serverEncoding = $value['server_encoding'];
            unset($value['server_encoding']);
        }

        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['imapPath'])) {
            $output['imap_path'] = $this->imapPath;
        }
        if (isset($this->_usedProperties['username'])) {
            $output['username'] = $this->username;
        }
        if (isset($this->_usedProperties['password'])) {
            $output['password'] = $this->password;
        }
        if (isset($this->_usedProperties['attachmentsDir'])) {
            $output['attachments_dir'] = $this->attachmentsDir;
        }
        if (isset($this->_usedProperties['createAttachmentsDirIfNotExists'])) {
            $output['create_attachments_dir_if_not_exists'] = $this->createAttachmentsDirIfNotExists;
        }
        if (isset($this->_usedProperties['createdAttachmentsDirPermissions'])) {
            $output['created_attachments_dir_permissions'] = $this->createdAttachmentsDirPermissions;
        }
        if (isset($this->_usedProperties['serverEncoding'])) {
            $output['server_encoding'] = $this->serverEncoding;
        }
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }

        return $output;
    }

}
