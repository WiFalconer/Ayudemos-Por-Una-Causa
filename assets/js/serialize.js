        function serialize(form) {       
            console.log('Serialize Form');
            var lastClassName = '';
            var bEvaluated = false;

            if (!form || form.nodeName !== 'FORM') {
                return;
            }
            var i, j, q = [];
            for (i = form.elements.length - 1; i >= 0; i = i - 1) {
                var n = form.elements[i].name;
                var v = form.elements[i].value;
                var t = form.elements[i].type;
                if (n === '') {
                    continue;
                }
                switch (form.elements[i].nodeName) {
                case 'INPUT':
                    switch (t) {
                    case 'text':
                    case 'hidden':
                    case 'password':
                        console.log('****', n , '  ' , encodeURIComponent(v), '  ', (encodeURIComponent(v).length < 1 ? "" : v) );
                        
                        q.push(n + "=" + (encodeURIComponent(v).length < 1 ? "" : v));
                        break;
                    case 'checkbox':
                    case 'radio':
                        var nodeList = document.querySelectorAll('input[name="'+ n + '"]');
                        if (nodeList.length > 1) 
                        {
                            if (n !== lastClassName) {
                                nodeList.forEach(function(node, i) {
                                    if (node.checked) {
                                        q.push(n + "=" + encodeURIComponent(node.value));
                                        bEvaluated = true;
                                    }
                                });
                                if (!bEvaluated) 
                                    q.push(n + "=" + encodeURIComponent(0));
                                
                                lastClassName = n;
                            }
                        }
                        else 
                            if (form.elements[i].checked) {
                                q.push(n + "=" + encodeURIComponent(v));
                            }	
                            else
                                q.push(n + "=" + encodeURIComponent('0'));
                        break;
                    }
                    break;			 
                case 'TEXTAREA':
                    q.push(n + "=" + (encodeURIComponent(v).length < 1 ? "" : v));
                    break;
                }
            }
            return q.join("&");
        }        



    var query_to_hash = function(queryString) {
     
        var pairs = queryString.slice(1).split('&');

        //var result = {};
        var tmp = "";
        pairs.forEach(function(pair, i) {
            pair = pair.split('=');
            //result[pair[0]] = decodeURIComponent(pair[1] || '');
            // tmp += (pair[0] + '=' + '"' + decodeURIComponent(pair[1] || '') + '"');
            // if (i < (pairs.length - 1)) 
            //     tmp += ", ";
            
            tmp += (decodeURIComponent(pair[1] || ' ') + "/");
            
        });
//        tmp += "}";
        console.log('Query Hash', tmp);
        result = tmp;
        
        return result;
     
    };