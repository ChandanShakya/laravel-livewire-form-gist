# Laravel Livewire Form Example

This repository demonstrates a clean, standards-based implementation of a Laravel Livewire form using a form object, reusable Blade components, and parent-child component composition. It is ideal for learning best practices or as a template for your own Livewire projects.

## Features
- **Livewire Form Object**: Encapsulates validation and persistence logic.
- **Reusable Blade Input Component**: Simplifies form markup and error handling.
- **Parent-Child Component Composition**: Shows how to nest and pass data between components.
- **Validation and Error Display**: Uses Livewire's validation attributes and error directives.

## File Structure
```
app/Livewire/
  ├── Forms/PostForm.php         # Form object with validation and store logic
  ├── CreatePost.php            # Livewire component for creating posts
  ├── PostDashboard.php         # Parent component demonstrating composition
  └── PostCount.php             # Child component showing post count

resources/views/
  ├── components/input-text.blade.php      # Reusable input Blade component
  └── livewire/
        ├── create-post.blade.php         # Form view
        ├── post-dashboard.blade.php      # Parent view
        └── post-count.blade.php          # Child view
```

## Usage
1. **Clone the repository**
   ```bash
   git clone https://github.com/ChandanShakya/laravel-livewire-form-gist.git
   ```
2. **Copy the example files into your Laravel project**
3. **Run migrations and seed your database as needed**
4. **Access the parent dashboard component to see the form and post count in action**

## Example Components
- `CreatePost`: Handles post creation using a form object.
- `PostDashboard`: Parent component that includes the form and post count.
- `PostCount`: Displays the total number of posts.
- `input-text`: Blade component for clean input fields with error display.

## References
- [Livewire Documentation](https://livewire.laravel.com/docs)

---

Feel free to use, modify, or extend this example for your own Livewire projects!
