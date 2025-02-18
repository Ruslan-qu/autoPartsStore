<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Imap'.\DIRECTORY_SEPARATOR.'ConnectionConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ImapConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $connections;
    private $_usedProperties = [];

    public function connection(string $name, array $value = []): \Symfony\Config\Imap\ConnectionConfig
    {
        if (!isset($this->connections[$name])) {
            $this->_usedProperties['connections'] = true;
            $this->connections[$name] = new \Symfony\Config\Imap\ConnectionConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "connection()" has already been initialized. You cannot pass values the second time you call connection().');
        }

        return $this->connections[$name];
    }

    public function getExtensionAlias(): string
    {
        return 'imap';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('connections', $value)) {
            $this->_usedProperties['connections'] = true;
            $this->connections = array_map(fn ($v) => new \Symfony\Config\Imap\ConnectionConfig($v), $value['connections']);
            unset($value['connections']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['connections'])) {
            $output['connections'] = array_map(fn ($v) => $v->toArray(), $this->connections);
        }

        return $output;
    }

}
