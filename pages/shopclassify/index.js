Page({
  data: {
    cateItems: [
      {
        cate_id: 1,
        cate_name: "小学",
        ishaveChild: true,
        children:
        [
          {
            child_id: 1,
            name: '春秋装',
            image: "/pages/images/oldyear.png"
          },
          {
            child_id: 2,
            name: '夏装',
            image: "/pages/images/commonj.png"
          },
          {
            child_id: 3,
            name: '冬装',
            image: "/pages/images/minuentj.png"
          }
          
        ]
      },
      {
        cate_id: 2,
        cate_name: "初中",
        ishaveChild: true,
        children:
        [
          {
            child_id: 1,
            name: '春秋装',
            image: "/pages/images/tqxl.png"
          },
          {
            child_id: 2,
            name: '夏装',
            image: "/pages/images/touqxl.png"
          },
          {
            child_id: 3,
            name: '冬装',
            image: "/pages/images/bjyxl.png"
          }
        ]
      },
      {
        cate_id: 3,
        cate_name: "高中",
        ishaveChild: true,
        children:
        [
          {
            child_id: 1,
            name: '春秋装',
            image: "/pages/images/cfj.png"
          },
          {
            child_id: 2,
            name: '夏装',
            image: "/pages/images/hjj.png"
          },
          {
            child_id: 3,
            name: '冬装',
            image: "/pages/images/rj.png"
          }
          
        ]
      }
      
      
      
    ],
    curNav: 1,
    curIndex: 0
  },

  //事件处理函数  
  switchRightTab: function (e) {
    // 获取item项的id，和数组的下标值  
    let id = e.target.dataset.id,
      index = parseInt(e.target.dataset.index);
    // 把点击到的某一项，设为当前index  
    this.setData({
      curNav: id,
      curIndex: index
    })
  }
})  