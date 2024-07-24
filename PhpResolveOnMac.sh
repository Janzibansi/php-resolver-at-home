#!/bin/bash

# Default port
DEFAULT_PORT=8000

# Use the provided port if given, otherwise use the default port
PORT=${1:-$DEFAULT_PORT}

# Start the PHP built-in server
php -S 127.0.0.1:$PORT &

# Capture the PID of the PHP server process
PHP_SERVER_PID=$!

# Open the URL in the default browser (macOS)
open http://127.0.0.1:$PORT

# Wait for the PHP server process to finish
wait $PHP_SERVER_PID