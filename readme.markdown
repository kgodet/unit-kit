Kit to build a package related to a unit of measurement.

What you usually need for a unit of measurement:

  * A `ValueObject` class which represents a value of what is measured.
  * A parser to interpret strings as measures.
  * One or several unit system(s).
  * A converter to pass from a unit to another, possibly in another unit system.
  * A formatter to show the amount in the ValueObject according to the unit from the converter.

Problems you may encounter:

  * Localization of the formats.
  * Localization of the units (metric/imperial systems).

Quantities are not translated because it can be handled by any i18n solution.