#!/bin/bash

# Default port
DEFAULT_PORT=8000

# Use the provided port if given, otherwise use the default port
PORT=${1:-$DEFAULT_PORT}

# Start the PHP built-in server
php -S 127.0.0.1:$PORT &

# Capture the PID of the PHP server process
PHP_SERVER_PID=$!

# Open the URL in the default browser
if which xdg-open > /dev/null; then
  xdg-open http://127.0.0.1:$PORT
elif which gnome-open > /dev/null; then
  gnome-open http://127.0.0.1:$PORT
elif which open > /dev/null; then
  open http://127.0.0.1:$PORT
else
  echo "Could not detect the web browser to use."
fi

# Wait for the PHP server process to finish (useful if you want to keep the script running)
wait $PHP_SERVER_PID