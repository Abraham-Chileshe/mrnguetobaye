
import re
import os

css_path = r"c:\Users\achil\Desktop\web\assets\css\style-liberty.css"
with open(css_path, "r", encoding="utf-8") as f:
    content = f.read()

# Regex to find all class names starting with w3l-
# Matches .w3l-something up to space, brace, comma, or colon
matches = re.findall(r"\.(w3l-[a-zA-Z0-9_\-]+)", content)

# Unique sorted list
unique_classes = sorted(list(set(matches)))

print("Found classes:")
for c in unique_classes:
    print(c)
