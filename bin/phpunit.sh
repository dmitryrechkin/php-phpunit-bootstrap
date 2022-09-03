#! /bin/bash

SCRIPT_DIR=$(dirname "${BASH_SOURCE[0]}")
BIN_DIR=$SCRIPT_DIR/../../../bin
CONFIG_FILEPATH=$SCRIPT_DIR/../src/phpunit.xml

$BIN_DIR/phpunit -c $CONFIG_FILEPATH