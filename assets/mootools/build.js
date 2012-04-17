/*
MooTools
*/"use strict"

var prime = require("prime")
var type = require("prime/util/type")

var map = require("prime/collection/map")
var list = require("prime/collection/list")
var hash = require("prime/collection/hash")

var string = require("prime/types/string")
var number = require("prime/types/number")

var ghost = require("prime/util/ghost")

var array = require("prime/es5/array")

prime.type = type

prime.map = map
prime.list = list
prime.hash = hash

prime.string = string
prime.number = number

var mootools = {};

mootools._ = ghost
mootools.prime = prime

mootools.array = array

var slick = require("slick")
var nodes = require("nodes")
nodes.use(slick)

mootools.$ = nodes

var moofx = require("moofx")

mootools.moofx = moofx

global.mootools = mootools