angular.module('todoApp', [])
    .controller('todoListController', ['$scope', function($scope) {
        var todoList = this;
        todoList.todos = [{
            text: 'name1',
            done: true
        }, {
            text: 'name2',
            done: false
        }];

        todoList.remaining = function() {
            var count = 0;
            angular.forEach(todoList.todos, function(todo) {
                count += todo.done ? 0 : 1;
            });
            return count;
        };

        todoList.addTodo = function() {
            todoList.todos.push({
                text: todoList.todoItem,
                done: false
            });
            todoList.todoItem = '';
        };

        todoList.clearDone = function() {
            var oldTodo = todoList.todos;
            todoList.todos = [];
            angular.forEach(oldTodo, function(todo) {
                if (!todo.done) {
                    todoList.todos.push(todo);
                }
            });
        };
    }]);
