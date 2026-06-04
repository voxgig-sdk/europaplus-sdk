# Europaplus SDK configuration


def make_config():
    return {
        "main": {
            "name": "Europaplus",
        },
        "feature": {
            "test": {
        "options": {
          "active": False,
        },
      },
        },
        "options": {
            "base": "https://www.europaplus.ru",
            "headers": {
        "content-type": "application/json",
      },
            "entity": {
                "schedule": {},
            },
        },
        "entity": {
      "schedule": {
        "fields": [
          {
            "name": "description",
            "req": False,
            "type": "`$STRING`",
            "active": True,
            "index$": 0,
          },
          {
            "name": "host",
            "req": False,
            "type": "`$STRING`",
            "active": True,
            "index$": 1,
          },
          {
            "name": "program",
            "req": False,
            "type": "`$STRING`",
            "active": True,
            "index$": 2,
          },
          {
            "name": "time",
            "req": False,
            "type": "`$STRING`",
            "active": True,
            "index$": 3,
          },
        ],
        "name": "schedule",
        "op": {
          "list": {
            "name": "list",
            "points": [
              {
                "method": "GET",
                "orig": "/schedule",
                "parts": [
                  "schedule",
                ],
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
                "active": True,
                "args": {},
                "select": {},
                "index$": 0,
              },
            ],
            "input": "data",
            "key$": "list",
          },
        },
        "relations": {
          "ancestors": [],
        },
      },
    },
    }
