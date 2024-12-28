# To-Do List Project

A simple To-Do List application built with PHP to manage tasks efficiently. This project includes features for adding, editing, updating, and marking tasks as done or pending.

## Features

- Add new tasks with detailed notes.
- Edit and update existing tasks.
- Mark tasks as "Doing" or "Done."
- View tasks categorized as "Notes," "Doing," or "Done."
- Delete tasks when no longer needed.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/radyosama3/todo-list-php.git
   ```
2. Navigate to the project directory:
   ```bash
   cd todo-list-php
   ```

## Main Functions

### 1. **Add a Task**
   - Create a new task with a title and detailed notes.
   - Save tasks to a database or file.

### 2. **Edit and Update Tasks**
   - Modify the task title or notes.
   - Update the status of tasks (e.g., "Notes," "Doing," or "Done").

### 3. **View Tasks**
   - Filter tasks by their status:
     - **Notes**: Tasks to be reviewed or planned.
     - **Doing**: Tasks currently in progress.
     - **Done**: Completed tasks.

### 4. **Delete Tasks**
   - Remove tasks from the list permanently.

## File Structure

```
todo-list-php/ 
├── assets/ # Folder for static assets like CSS or JS 
├── handle/ # Folder for handling backend logic 
├── inc/ # Folder for including connection for DB with PHP files 
├── App.php # Core application logic 
├── edit.php # File to handle editing tasks 
├── index.php # Main file to display tasks 
├── README.md # Project documentation
```



## How to Use

1. **Add a Task**: Use the "Add Task" button to create a new task.
2. **Edit a Task**: Click on a task to edit its details or change its status.
3. **View Tasks**: Navigate through the tabs to view tasks by their categories.
4. **Delete a Task**: Use the delete icon to remove a task.

## Future Enhancements

- User authentication to manage tasks individually.
- Priority levels for tasks.
- Integration with external APIs for reminders or notifications.

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request.

## License

This project is licensed under the MIT License.
*/
