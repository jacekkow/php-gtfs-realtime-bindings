#!/bin/bash
protoc --proto_path=src --php_out=out src/gtfs-realtime.proto
