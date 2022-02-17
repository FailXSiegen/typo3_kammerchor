#!/bin/bash
for file in extensions/*
do
    if [ -d $file ]
    then
        if [ -f $file/package.json ]
        then
            yarn install --silent --non-interactive --cwd $file
        fi
    fi
done
