
import os

# Mapping of old class names to new class names
class_mapping = {
    "w3l-header": "site-header",
    "w3l-main-banner": "hero-section",
    "w3l-about1": "about-section",
    "w3l-index6": "services-overview",
    "w3l-services2": "services-detailed",
    "w3l-gallery2": "gallery-section",
    "w3l-index5": "video-intro-section",
    "w3l-index2": "fun-facts-section",
    "w3l-news": "news-section",
    "w3l-testimonials": "testimonials-section",
    "w3l-contact": "contact-section",
    "w3l-grid-quote": "quote-section",
    "w3l-footer": "site-footer",
    "w3l-blog": "blog-grid",
    "w3l-blog-breadcrum": "breadcrumb-section",
    "w3l-blog-single": "post-single",
    "w3l-blog-single1": "post-header",
    "w3l-blog-single2": "post-content",
    "w3l-blog-single3": "post-navigation",
    "w3l-blog-single4": "post-comments",
    "w3l-blog-single5": "post-reply",
    "w3l-blog-single6": "post-related",
    "w3l-forms-29-form": "contact-form-container",
    "w3l-text-styles-33_sur": "text-styles-highlight"
}

files_to_process = [
    r"c:\Users\achil\Desktop\web\assets\css\style-liberty.css",
    r"c:\Users\achil\Desktop\web\index.html",
    r"c:\Users\achil\Desktop\web\blog.html",
    r"c:\Users\achil\Desktop\web\blog-single.html",
    r"c:\Users\achil\Desktop\web\index8ea7.html"
]

def process_file(file_path):
    print(f"Processing {file_path}...")
    try:
        with open(file_path, "r", encoding="utf-8") as f:
            content = f.read()
        
        new_content = content
        for old_class, new_class in class_mapping.items():
            new_content = new_content.replace(old_class, new_class)
        
        if new_content != content:
            with open(file_path, "w", encoding="utf-8") as f:
                f.write(new_content)
            print(f"Updated {file_path}")
        else:
            print(f"No changes for {file_path}")
            
    except Exception as e:
        print(f"Error processing {file_path}: {e}")

if __name__ == "__main__":
    for file_path in files_to_process:
        if os.path.exists(file_path):
            process_file(file_path)
        else:
            print(f"File not found: {file_path}")
