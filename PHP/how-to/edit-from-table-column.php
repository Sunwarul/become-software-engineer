<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit from table column</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 3px 10px;
        }

        .editing-input {
            border: 1px solid red;
            width: inherit;
            height: inherit;
        }
    </style>
</head>

<body>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>john@gmail.com</td>
            <td>Active</td>
            <td>
                <button>View</button>
                <button>Edit</button>
                <button>Delete</button>
            </td>
        </tr>
    </table>

    <script>
        const tdElements = document.getElementsByTagName('td');
        let activeCell = null;

        for (let el of tdElements) {
            el.addEventListener('dblclick', function() {
                if (this.childElementCount === 0) {
                    
                    console.log('Get H and W');
                    console.log(this.children)

                    let input = document.createElement('input');
                    input.setAttribute('type', 'text');
                    input.setAttribute('value', this.innerHTML);
                    input.setAttribute('class', 'editing-input')
                    this.innerHTML = "";
                    this.appendChild(input);
                    activeCell = this;
                }
            })
        }

        document.addEventListener('mouseup', function(e) {
            if (activeCell !== null) {
                let container = activeCell.children[0];
                if (container != e.target) {
                    activeCell.innerHTML = container.value;
                    activeCell = null;
                }
            }
        })
    </script>
</body>

</html>