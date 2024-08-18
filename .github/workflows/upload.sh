#!/bin/bash -ex

# Ensure correct context
cd $(dirname $0)/../..

# Send the files
aws s3 sync --exclude ".*" --delete . s3://jassg.ca/

# Clear the cache
aws cloudfront create-invalidation --distribution-id E2Q13YEQKCSRNE --paths "/*"
